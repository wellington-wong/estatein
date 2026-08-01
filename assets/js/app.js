const topAnnouncement = document.querySelector("#top-announcement");

topAnnouncement.addEventListener('click', function () {

	document.cookie=
		"top_announcement=true; max-age=86400; path=/";
	topAnnouncement.classList.add('hidden');

});

if (!getCookie('top_announcement')) {
	topAnnouncement.classList.remove('hidden');
}

function getCookie(name) {

    const cookies = document.cookie.split('; ');
    for (const cookie of cookies) {
        const [key, value] = cookie.split('=');
        if (key === name) {
            return value;
        }
    }
    return null;

}
