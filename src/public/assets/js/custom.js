function serviceBstk(url){
    const mainContent = $('#mainContent')
    $.get(`/${url}`,(data) => {
        mainContent.html(data)
        history.pushState("data","Title",url)
    }).fail(()=>(
        alert("Error Please Relogin!!")
    ))
}