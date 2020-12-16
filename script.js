function openLink(value) {
    if (value == "home") {
        window.location.href = "/";
    }
}

function copyLink() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Copied the link: " + copyText.value);
}