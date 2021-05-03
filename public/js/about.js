function animPictOwner( state ) {
    const id = document.getElementById('imageOwnerbg');
    switch (state) {
        case 'in':
            id.style.opacity = '0' ;
            break;
        case 'out':
            id.style.opacity = '.4' ;
            break;
        default:
            break;
    }
}