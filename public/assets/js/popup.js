const openPopupBtn = document.getElementById('open-popup-btn');
const popup = document.getElementById('popup');
const closePopupBtn = document.getElementById('close-popup-btn');
openPopupBtn.addEventListener('click', () => {
  popup.style.display = 'block';
  document.body.classList.add('dimmed');
});
closePopupBtn.addEventListener('click', () => {
  popup.style.display = 'none';
  document.body.classList.remove('dimmed');
});