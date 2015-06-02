var app=document.querySelector('super-template');

page('/',home);
page('/',shop);
page('/',design);
page('/',sell);

//page({hashbang:true});

function home(){
    app.route='home';
}

function shop(){
    app.route='shop';
}

function design(){
    app.route='design';
}

function sell(){
    app.route='sell';
}


