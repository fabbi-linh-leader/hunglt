export default class Gate{

    constructor(user){
        this.user = user;
    }

    isAdmin(){
        return this.user.type === 'admin';
    }

    isUser(){
        return this.user.type === 'user' || this.user.type === 'employ' || this.user.type === 'hr' || this.user.type === 'accountant' || this.user.type === 'leader' || this.user.type === 'group leader'  ;
    }
  
    isAdminOrAuthor(){
        if(this.user.type === 'admin' || this.user.type === 'author'){
            return true;
        }

    }
    isAuthorOrUser(){
        if(this.user.type === 'user' || this.user.type === 'hr' || this.user.type === 'employ' || this.user.type === 'accountant' || this.user.type === 'leader' || this.user.type === 'group leader' || this.user.type === 'author' ){
            return true;
        }

    }



}

