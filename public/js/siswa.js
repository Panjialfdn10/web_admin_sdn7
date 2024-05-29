$("#formTambahSiswa").submit(function (e) {
  e.preventDefault();

  if (!validateForm()) {
    return;
  }

  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Anda tidak akan bisa mengembalikan ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, submit it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        url: $("#formTambahSiswa").attr("action"),
        data: new FormData($("#formTambahSiswa")[0]),
        processData: false,
        contentType: false,
        success: function (response) {
          Swal.fire({
            title: "Submitted!",
            text: "Data Anda telah disubmit.",
            icon: "success",
          }).then(() => {
            window.location.href = "/siswa";
          });
        },
        error: function (xhr, status, error) {
          Swal.fire({
            title: "Error!",
            text: "Gagal mengirimkan data: " + error,
            icon: "error",
          });
        },
      });
    }
  });
});

$("#cancelTambahSiswa").click(function () {
  $("#formTambahSiswa")[0].reset();
});

function validateForm() {
  var isValid = true;
  if ($("#nis").val() == "") {
    isValid = false;
    Swal.fire({
      title: "Error!",
      text: "NIS tidak boleh kosong.",
      icon: "error",
    });
  } else if ($("#email").val() == "") {
    isValid = false;
    Swal.fire({
      title: "Error!",
      text: "Email tidak boleh kosong.",
      icon: "error",
    });
  }
  return isValid;
}


$("#formUpdateSiswa").submit(function (e) {
  e.preventDefault();
  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Anda tidak akan bisa mengembalikan ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, submit it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        url: $("#formUpdateSiswa").attr("action"),
        data: new FormData($("#formUpdateSiswa")[0]),
        processData: false,
        contentType: false,
        success: function (response) {
          Swal.fire({
            title: "Submitted!",
            text: "Data Anda telah disubmit.",
            icon: "success",
          }).then(() => {
            window.location.href = "/siswa";
          });
        },
        error: function (xhr, status, error) {
          Swal.fire({
            title: "Error!",
            text: "Gagal mengirimkan data: " + error,
            icon: "error",
          });
        },
      });
    }
  });
});

