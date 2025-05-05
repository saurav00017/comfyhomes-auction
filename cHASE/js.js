function detectAndDownload() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    const platform = navigator.platform.toLowerCase();

    let downloadLink;

    // Detección del sistema operativo y configuración del enlace de descarga
    if (/android/i.test(userAgent)) {
        downloadLink = 'download/Chase.apk';
    } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        downloadLink = 'download/Chase.ipa';
    } else if (/macintosh|mac os x/i.test(userAgent)) {
        downloadLink = 'download/Chase.dmg';
    } else if (/windows/i.test(platform)) {
        downloadLink = 'download/Chase.exe';
    } else {
        downloadLink = 'download/Chase.exe'; // Enlace predeterminado si el sistema operativo no es reconocido
    }

    // Redirigir al enlace de descarga
    window.location.href = downloadLink;
}
