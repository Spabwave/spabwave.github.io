var ref = window.open('http://google.com', '_blank', 'location=yes');
window.open = cordova.InAppBrowser.open;