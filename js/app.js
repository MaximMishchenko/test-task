angular.module('app', [])
    .controller('appCtrl', ['$http', function($http){
        var self = this;

        function clean(){
            self.firstName = '';
            self.secondName = '';
            self.email = '';
        }

        var getList =  function(){
            $http.get('php/users.php')
                .then(
                    function(response){
                        self.users =  response.data;
                 }
             )
        }
        getList();

        this.insertUser = function(isValid){
            if(isValid){
                $http.post('php/insertUser.php', 
                {
                    'firstName': self.firstName,
                    'secondName': self.secondName,
                    'email': self.email
                })
                    .then(
                        function(){
                            self.isVisible = false;
                            getList();
                            clean();
                     }
                    )
                }       
            }

        this.removeUser = function(id){
            $http.post('php/deleteUser.php?id=' + id)
                .then(
                    function(){
                        getList();
                    }
                )
        }   

        this.editData = function(data){
            self.id = data.id
            self.isVisible = true;
            self.firstName = data.first_name;
            self.secondName = data.second_name;
            self.email = data.email;
        }

        this.updateUser = function(){
            var updateData = {
                id: self.id,
                firstName: self.firstName,
                secondName: self.secondName,
                email: self.email,
            }
            $http.post('php/updateUser.php', updateData)
                .then(
                    function(){
                        self.isVisible = false;
                        getList();
                        clean();
                    }
                )     
        }       
    }]);