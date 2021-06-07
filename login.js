// for the sliding animation

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// search function in jobs section
function jobSearch() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('jobInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("jobAvailable");
  li = ul.getElementsByTagName('li');

  if(input.value.length == 0) {
    ul.style.display = "none";
    return;
  }
  else {
    ul.style.display = "block";
  }

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "block";
    } else {
      li[i].style.display = "none";
    }
  }
}
