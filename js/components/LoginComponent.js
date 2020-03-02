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

                <div class="submit-button">
                            <button type="submit" class="btn btn-primary">Go!</button>
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

                let url = "./includes/index.php?user=true";

                fetch(url, {
                    method: "POST",
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data)

                    // tell the app that we have a successful login
                    // and store the user object that we retrieved

                    // true below means that authentication worked
                    // data is the user we retrieved from the DB
                    this.$emit("authenticated", true, data[0]);

                    // push the user to the users page
                    this.$router.replace({name: "users"});

                   
                })
                .catch((err) => console.log(err));

            } else {
                console.error("inputs can't be blank!");
            }
        }
    }
}