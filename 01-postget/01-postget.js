// jika ada yg fungsi yg di run setelah load html complete
$(document).ready(function () {});

function add_ayat() {
  var url = "data.php";
  var param = {}; // jika ada variable yg di kirimkan

  $.post(
    url,
    param,
    function (d) {
      //console.log(d);
      var _ayat = d.ayat; // ambil nilai ke object

      // lakukan pengubahan html
      _ayat = "<p>" + _ayat + "</p>";

      // tambahkan / append ke div tujuan
      $("#id-div-nya").append(_ayat);
    },
    "json"
  ); // ini bisa saja json, text, html, dll
}
