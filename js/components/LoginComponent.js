export default {
    template: `
        <div class="container">
            <div class="jumbotron roku-jumbotron">
                <h1 class="welcome-message">Ready to throw it back?</h1>
                <p class="login-note">Before we party like it's 1999, you have to login.</p>
                <hr class="my-4">
                <form @submit.prevent="login">
                <div class="form">
                <div class="username-field">
                    <input v-model="input.username" type="text" class="form-control" id="inlineFormInputName" placeholder="username" required>
                </div>

                <div class="password-field">
                    <input v-model="input.password" type="password" class="form-control" id="inlineFormPassword" placeholder="password" required>
                </div>

                <div>
                <button v-on:click.prevent="login()" type="submit" class="subButton">Go!</button>
        
                        </div>
                    </div>
                </form>            
            </div>
        </div>
     `,

    data() {
        return {
            input: {
                username: "",
                password: ""
            },

        }
    },

    methods: {
        login() {
            //console.log(this.$parent.mockAccount.username);
            //debugger;
            if (this.input.username != "" && this.input.password != "") {
                // use the FormData object to collect and send our params
                let formData = new FormData();

                formData.append("username", this.input.username);
                formData.append("password", this.input.password);

                let url = `./admin/admin_login.php`;

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        if (typeof data != "object") { // means that we're not getting a user object back
                            console.warn(data);
                            // just for testing
                            alert("authentication failed, please try again");
                        } else {
                            this.$emit("authenticated", true, data);
                            this.$router.replace({ name: "users" });
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            } else {
                console.log("A username and password must be present");
            }
        }
    }
}