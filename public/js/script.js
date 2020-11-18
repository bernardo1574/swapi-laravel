window.addEventListener('load', () => {
    render();
});

const render = () => {

}
const api = async (url) => {
    const ships = await doFetch(url);
    console.log(ships)
    document.getElementById('url').value = url
    for (const key in ships){

        if (document.getElementById(key) != null)
            document.getElementById(key).value = ships[key]
    }

}

const doFetch = async (url) => {
    const res = await fetch(url);
    return await res.json();
}
