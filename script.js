const totalTime = 1*60*1000;

const start = Date.now();

function verifytime(){
    const curretlyTime = Date.now()-start
    const timerest = totalTime - curretlyTime
    if (timerest <= 0) {
       clearInterval(interval)
       swal('El tiempo termino')
    } else {
        const minutes = Math.floor(timerest/(60*1000));
        const seconds = Math.floor((timerest%(60*1000))/1000)
        document.getElementById('timeRest').textContent = `Tiempo restante: ${minutes}:${seconds < 10 ? '0': ''}${seconds}`
    }
}

const interval = setInterval(verifytime,1000);
