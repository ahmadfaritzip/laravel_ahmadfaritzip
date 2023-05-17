function validateDel(url, token) {
  event.preventDefault(); // prevent form submit
  // var form = $('a#del-' + token)
  Swal.fire({
    title: 'Hapus Data ?',
    text: "Apakah anda akan menghapus data ini!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(url, {
        method: "DELETE",
        data: {
          "_token": token
      },
      })
      .then(function (response) {
        // location.reload()
      })
      .then(function (data) {
        console.log(data);
        // location.reload()
      })
      .catch((error) => console.error("Error:", error));
    }
  })
}