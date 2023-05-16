function fetchUsers(str) {
    const userListHtml = document.getElementById("fetched-user");

    if (str === '') {
        userListHtml.innerHTML = 'Type anything to search!';
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200)
            userListHtml.innerHTML = this.responseText === '' ? 'No user found!' : this.responseText;
    };
    xhttp.open("GET", "../Model/SearchUser.php?name=" + str, true);
    xhttp.send();
}