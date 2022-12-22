function click_get_text() {
    const text = document.getElementById("mashimashi").innerHTML;
    if (text != "") {
        let speech = new SpeechSynthesisUtterance(text);
        window.speechSynthesis.speak(speech);
    }
}
