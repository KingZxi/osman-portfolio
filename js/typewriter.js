const dynamicText = document.querySelector(".typewriter");
const caret = document.querySelector(".caret");

//Append more words here for typing and remoing effect
const words = ["Osman Mahmood"];

//If the h1 tag contains some text in the HTML, that will instead override anything in the words array.
if (dynamicText.textContent.trim() !== "") {
  words.length = 0;
  words.push(dynamicText.textContent);
} else {
}

let wordIndex = 0;
let charIndex = 1;
let speed = 100;
let isDeleting = false;

const typeEffect = () => {
  const currentWord = words[wordIndex];
  const currentChar = (currentWord.subString = currentWord.substring(
    0,
    charIndex
  ));
  dynamicText.textContent = currentChar;
  if (!isDeleting && charIndex < currentWord.length) {
    //If this condiiton is true, the next character will be typed
    charIndex++;
    setTimeout(typeEffect, speed);
    caret.classList.add("stop-blinking");
  } else if (isDeleting && charIndex > 0) {
    // If this condition is true, remove the previous character
    charIndex--;
    setTimeout(typeEffect, 100);
  } else if (words.length > 1) {
    // If word is deleted, next word will begin typing
    isDeleting = !isDeleting;
    caret.classList.remove("stop-blinking");
    wordIndex = !isDeleting ? (wordIndex + 1) % words.length : wordIndex;
    setTimeout(typeEffect, 1200);
  }
};

typeEffect();
