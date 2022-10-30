function updatePicToParent(path) {
    window.parent.document.getElementById("iframeUploadImage").style.display = 'none';
    window.parent.document.getElementById("loadingImage").style.display = 'none';
    window.parent.document.getElementById("siteDataHolder_imgProfilePic").setAttribute("src", path + "?" + new Date().getTime());
}

function showLoader() {
    window.parent.document.getElementById("loadingImage").style.display = 'block';
    return true;
}

function sessionExpires(path) {
    var data = path.replace("~", "");
    window.parent.location.href = data;
}

function enableUpload() {
    document.getElementById("btnSubmit").disabled = false;
}