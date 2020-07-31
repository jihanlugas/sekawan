// document.getElementById('user-menu-toggle').onclick = function(){
//     document.getElementById("user-menu-context").classList.toggle("hidden");
// }
//
// document.getElementById('nav-toggle').onclick = function(){
//     document.getElementById("nav-context").classList.toggle("hidden");
// }


$('#user-menu-toggle').click(function () {
    $('#user-menu-context').toggle('.hidden');
})

$('#nav-toggle').click(function () {
    $('#nav-context').toggle('.hidden');
})

// window.addEventListener('click', function(e) {
//     if(document.getElementById("user-menu-context").contains(e.target)){
//         console.log('user menu' ,)
//     }else{
//         document.getElementById("user-menu-context").classList.toggle("hidden");
//     }
//
//     if(document.getElementById("nav-context").contains(e.target)){
//         console.log('nav menu' ,)
//     }else{
//         document.getElementById("nav-context").classList.toggle("hidden");
//     }
//
//
//     // var els = document.getElementsByClassName('dropdown');
//     //
//     // for (var i = 0; i < els.length; i++) {
//     //     if (els[i].contains(e.target)) {
//     //         // Clicked on dropdown
//     //     } else {
//     //         // Clicked outside the dropdown
//     //         els[i].classList.remove('active');
//     //     }
//     // }
// });
