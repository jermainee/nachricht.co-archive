// <COPYLINK
const copyLinkTrigger = document.getElementById("copyLinkTrigger");
const linkInputElement = document.getElementById("copyLinkInput");

if (copyLinkTrigger && linkInputElement) {
    copyLinkTrigger.addEventListener("click", () => {
        linkInputElement.select();
        document.execCommand("copy");
    });
}
// COPYLINK>

// <EMOJI
const emojiTriggerElement = document.getElementById("emojiTrigger");
const emojiListElement = document.getElementById("emojiList");
const messageElement = document.getElementById("nachricht");

if (emojiTriggerElement && emojiListElement && messageElement ) {
    let isEmojiOpen = false;

    const emojiCodeList = [0x1F642, 0x1F600, 0x1F603, 0x1F604, 0x1F601, 0x1F605, 0x1F923, 0x1F602, 0x1F609, 0x1F61B, 0x1F92A, 0x1F60A, 0x1F607, 0x1F60D, 0x1F618, 0x1F911, 0x1F92B, 0x1F92D , 0x1F914, 0x1F910, 0x1F928, 0x1F610, 0x1F611, 0x1F620, 0x1F4A9, 0x1F921, 0x1F47E, 0x1F648, 0x1F649, 0x1F64A, 0x1F4A6, 0x1F44C, 0x270C, 0x1F91E, 0x1F918, 0x1F595, 0x1F919, 0x1F44D, 0x1F44E, 0x1F64C, 0x1F64F, 0x1F4AA, 0x1F525, 0x1F31A, 0x1F3CB, 0x1F3CB, 0x1F340, 0x1F341];
    emojiTriggerElement.addEventListener("click", () => {
        if (isEmojiOpen) {
            emojiListElement.classList.add("isHidden");
        } else {
            emojiListElement.classList.remove("isHidden");
        }

        isEmojiOpen = !isEmojiOpen;
    });

    emojiCodeList.forEach(emojiCode => {
        const emoji = String.fromCodePoint(emojiCode);
        const emojiElement = document.createElement("span");

        emojiElement.textContent = emoji;
        emojiElement.addEventListener("click", () => {
            messageElement.value += emoji;
        });

        emojiListElement.append(emojiElement);
    });
}
// EMOJI>

// < ![CDATA[
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-39078917-4']);
_gaq.push(['_gat._anonymizeIp']);
_gaq.push(['_trackPageview']);

(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
// ]]>

window.cookieconsent_options = {
    learnMore: 'More info',
    link: 'https://nachricht.co/datenschutz/'
};

// ServiceWorker
