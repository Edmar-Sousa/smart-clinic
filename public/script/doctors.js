
function getParamFromURL(param) {
    const searchParams = new URLSearchParams(window.location.search)
    return searchParams.get(param)
}

function setParamFromURL(param, value) {
    const url = new URL(window.location.href)
    url.searchParams.set(param, value)

    return url.href
}


function handlePageLoad() {
    const buttonCloseProfileElement = document.querySelector('button#close-modal'),
          profileModalElement = document.querySelector('aside.profile-view')

    buttonCloseProfileElement.addEventListener('click', () => {
        profileModalElement.classList.remove('open')
    })

    const idDoctorView = getParamFromURL('view')
    if (!idDoctorView) return

    profileModalElement.classList.add('open')
}

function handleViewProfile(id) {
    window.location.href = setParamFromURL('view', id)
}

window.addEventListener('load', handlePageLoad)