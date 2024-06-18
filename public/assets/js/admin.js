
// АДМИН-ПАНЕЛЬ КАТЕГОРИИ
const categories = document.querySelectorAll('.category')
let activeCategories = [];
categories.forEach((category) => {
  category.addEventListener('click', () => {
    if (activeCategories.includes(category)) {
      category.classList.remove('active');
      activeCategories = activeCategories.filter((item) => item !== category);
    } 
    else{
      category.classList.add('active');
      document.getElementById('terms_inp').value = document.getElementById('terms_inp').value + category.innerHTML + ', ';
      activeCategories.push(category);
    }
  });
});

// ИНПУТ КАРТИНКИ
const uploadBlocks = document.querySelectorAll('.upload-block');
uploadBlocks.forEach((uploadBlock) => {
  const fileInput = uploadBlock.querySelector('input[type="file"]');
  const uploadImage = uploadBlock.querySelector('img');
  fileInput.addEventListener('change', (e) => {
    const file = fileInput.files[0];
    const reader = new FileReader();
    reader.onload = (e) => {
      uploadImage.src = e.target.result;
    };
    reader.readAsDataURL(file);
  });
});


// админ панель селекторы

const selectElement = document.getElementById('select_company');
const selectShips = document.getElementById('results');

// Функция для получения данных по fetch
async function fetchData(url) {
  try {
    const response = await fetch(url);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error('Ошибка при получении данных:', error);
    return []; // Возвращаем пустой массив при ошибке
  }
}

// Функция для отображения данных в resultsContainer
function displayData(data) {
  selectShips.innerHTML='';
  data.forEach(elem=>{
                                        
    selectShips.insertAdjacentHTML('beforeend',`<option value="${elem.id}">${elem.name}</option>`)

  });

}

// Обработчик события изменения select
selectElement.addEventListener('change', async () => {
  const selectedValue = selectElement.value;

  // Изменение массива в зависимости от выбранного значения
  let data = await fetchData('/shipsApi'); // Загрузка данных по умолчанию

  // Пример преобразования массива с помощью map()
  if (selectedValue == '1') {
    data =data.filter(item => item.id_company == 1) // Преобразует все элементы массива в верхний регистр
  } else if (selectedValue == '2') {
    data = data.filter(item => item.id_company == 2); // Добавляет восклицательный знак к каждому элементу
  } else if (selectedValue == '3') {
    data = data.filter(item => item.id_company == 3); // Фильтрует массив, оставляя только элементы длиной более 5
  }

  displayData(data);
});

// Инициализация: загрузка данных по умолчанию
