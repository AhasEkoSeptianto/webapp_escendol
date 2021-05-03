function navDashboard( state ){
    if (state === 'open') {
        document.getElementById('nav_dashboard').style.display  = 'block';
    } else {
        document.getElementById('nav_dashboard').style.display = 'none' ;    
    }
}