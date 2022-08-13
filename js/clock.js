function startTime() {
  const today = new Date();
  var hour = today.getHours();
  var minute = today.getMinutes();
  var second = today.getSeconds();
  minute = checkTime(minute);
  second = checkTime(second);
  hour = checkTime(hour);
  document.getElementById('clock').innerHTML =
    hour + ' : ' + minute + ' : ' + second;
  setTimeout(startTime, 100);
}

function checkTime(i) {
  if (i < 10) {
    i = '0' + i;
  }
  return i;
}
