let userFilterInputEl = null;

window.addEventListener('load', init);

function init() {
  bindFilterBtns();
}

function bindFilterBtns() {
  let userFilterBtns = document.getElementById('user_filter_btn');
  userFilterInputEl = document.getElementById('user_filter_input');

  if (userFilterBtns === null) {
    return;
  }

  userFilterBtns.addEventListener('click', onFilterBtnClicked)
}

function onFilterBtnClicked() {
  let userName = userFilterInputEl.value;

  window.open(URL_HOME_GET + '?name=' + userName,"_self")
}
