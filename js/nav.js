/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
const responsiveNav = (event) => {
    event.preventDefault();
    const ulElement = document.querySelector("ul");
    if (ulElement.className === "not-responsive"){
        ulElement.className = "responsive";
    } else {
        ulElement.className = "not-responsive";
    }
};

document.querySelector('.icon').addEventListener('click', responsiveNav);
