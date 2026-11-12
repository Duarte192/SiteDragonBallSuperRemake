
const botao = document.querySelector("#Button button");
const linkLogin = document.querySelector("#Button a");
const video = document.getElementById("videoPreparando");


function restaurarHome() {
    botao.disabled = false;

    video.pause();
    video.removeAttribute("src");

    video.loop = true;
    video.currentTime = 0;
    video.load();

    video.play().catch(erro => {
        console.log("Não foi possível reproduzir o vídeo:", erro);
    });
}


window.addEventListener("pageshow", restaurarHome);


botao.addEventListener("click", async function(event) {
    event.preventDefault();

    botao.disabled = true;

    video.pause();
    video.loop = false;

    video.src = "app/view/assets/img/jogando.mp4";
    video.currentTime = 0;
    video.load();

    video.onended = function() {
        window.location.assign(linkLogin.href);
    };

    try {
        await video.play();
    } catch (erro) {
        console.error("Erro ao reproduzir vídeo:", erro);
        window.location.assign(linkLogin.href);
    }
});
