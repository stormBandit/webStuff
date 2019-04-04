$(document).ready(function()
{
    applyNavigation();
});

function applyNavigation()
{
    applyScrollSpy();
}

function applyScrollSpy()
{
    $('#mainNav').on('activate.bs.scrollspy', function()
    {
        window.location.hash = $('.nav .active a').attr('href');
    });
}