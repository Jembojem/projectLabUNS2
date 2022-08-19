$(document).ready(function () {

    //hide section
    document.getElementById("bukti").style.visibility = "hidden";
    document.getElementById("confirm-waktu").style.visibility = "hidden";
    document.getElementById("waktu-tersedia").style.visibility = "hidden";

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function () {
        return false;
    })

    var val = {
        'username': $('#kode_transaksi').val().split('-')[0],
        'kode_transaksi': $('#kode_transaksi').val(),
        'time_id': [],
    };
    $('input[type=radio][name=lab_slug]').change(function () {
        val['lab_slug'] = $(this).attr('id');
        $('#kalender').val();
        console.log(val);
    });

    let dataForm;

    var counterReservasi = 0;
    $('.pilihJam').on('click', function (e) {
        // e.preventDefault();
        if (counterReservasi < 5 || !this.checked) {
            if (this.checked) {
                counterReservasi++;
                val['time_id'].push($(this).val())
            } else {
                counterReservasi--;
                val['time_id'] = val['time_id'].filter(e => e !== $(this).val())
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Melebihi Batas Maksimal',
                text: 'Melebihi batas maksimal reservasi 300 Menit (5 Jam), Silahkan memilih hari lain atau lab lain',
            });
            $(this).prop('checked', false);
        }
        console.log($(this).val());
    })

    $('#kalender').change(function () {
        $('input[type=checkbox]').prop('disabled', false);
        val['tanggal'] = $(this).val();

        $('.milih').show();

        $.ajax({
            type: 'post',
            url: '/panel/reservasi/check-booking',
            data: {
                tanggal: val['tanggal'],
                lab_slug: val['lab_slug']
            },
            success: function (e) {
                var res = JSON.parse(e);
                var booked = [];
                var data;
                console.log(res);

                for (var index in res['booked']) {
                    booked.push(parseInt(res['booked'][index]['time_id']));
                }
                console.log(booked);

                for (var index in res['list_jam']) {
                    data = res['list_jam'][index];
                    // console.log(parseInt(data['id']));
                    // console.log(booked.includes(parseInt(data['id'])));

                    if (!booked.includes(parseInt(data['id']))) {
                        console.log("Masuk : " + data['id']);
                        $(`label#label-${data['id']}`).removeClass('btn-outline-secondary btn-secondary text-dark');
                        $(`label#label-${data['id']}`).addClass('btn-outline-primary');
                    } else {
                        console.log("Keluar : " + data['id']);
                        $(`input#${data['id']}`).prop('disabled', true);
                        $(`label#label-${data['id']}`).removeClass('btn-outline-primary');
                        $(`label#label-${data['id']}`).addClass('btn-outline-secondary btn-secondary text-dark');
                    }
                }
            }
        });
    });

    $('#prosesPembayaran').click(function () {
        console.log(val);
        $.ajax({
            url: '/panel/reservasi/proses-booking',
            type: 'post',
            data: val,
            success: function (e) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Memroses Reservasi!',
                    text: 'Segera Selesaikan Pembayaran Agar Dapat Menggunakan Lab',
                });
                console.log(e);
            }
        })
        document.getElementById("confirm-waktu").style.visibility = "visible";
        // document.getElementById("waktu-tersedia").style.visibility = "visible";
    });

    $('#confirm-waktu').click(function () {
        var lama = 0;
        $.ajax({
            url: '/panel/reservasi/payment-detail',
            type: 'post',
            data: val,
            success: function (e) {
                var res = JSON.parse(e)
                // console.log(res);
                $('#user-bill').html(res['transaksi']['username']);
                $('#date-bill').html(res['reservasi'][0]['created_at']);
                $('#id-bill').html(res['transaksi']['kode_transaksi']);
                $('#lab-bill').html(res['lab']['nama_lab']);
                $('#tanggal-bill').html(res['reservasi']['tanggal']);
                for (var key in res['time']) {
                    $('#in-bill').append(`<tr><td>Jam</td><td>${res['time'][key]['text']}</td></tr>`)
                    lama++;
                }
                $('#lama-bill').html(`${lama} Jam`);
                $('#perjam-bill').html(`Rp${res['lab']['price_per_hour']}`);
                $('#total-bill').html(`Rp${res['transaksi']['total']}`);

                // console.log(res['transaksi']);

            }
        })
    });

    $('#msform').submit(function (e) {
        // document.getElementById("bukti").style.visibility = "visible";

        e.preventDefault();
        val['nama_file'] = $('#formFile').val();
        var data = new FormData(this);
        data.append('kode_transaksi', val['kode_transaksi']);
        console.log(val);
        $.ajax({
            url: '/panel/reservasi/submit-bukti',
            data: data,
            type: 'post',
            processData: false,
            contentType: false,
            success: function (res) {
                var result = JSON.parse(res);
                console.log(result);
                Swal.fire({
                    icon: result.icon,
                    title: result.title,
                    text: result.text,
                });
                window.location.href = '/panel/history';
            }
        });
    });

    $('#make_payment').click(function (e) {
        // e.preventDefault();
        var dd = new FormData(this)
        console.log(dd);
    })

    // $('#msform').submit(function (e) {

    // });

});

//show bukti
function buktiTf() {
    console.log("hello")
    document.getElementById("bukti").style.visibility = "visible";
}


//show alert
// function cekWaktu() {
//     console.log("hello")
//     document.getElementById("confirm-waktu").style.visibility = "visible";
//     document.getElementById("waktu-tersedia").style.visibility = "visible";
// }