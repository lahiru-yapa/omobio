

import React from 'react';
import {BrowserRouter,Link,Switch,Route } from "react-router-dom";
import './login.css'
import userview from "./userview";


function x(){
    <BrowserRouter>
       <link to="/userview"></link>
    </BrowserRouter>
}

export default function login() { 
    return (
        <React.Fragment>
        <div className="main-wrapper">
            <div className="box">
                <div className="box-header">
                    <h1>Login</h1>
                </div>
                    <form className="box-form" action="/xampp/htdocs/Interview/Interviews/bizlogic/index.php" method="POST">
                        <input
                            className="form-item"
                            placeholder="Username"
                            name="username"
                            type="text"
                        />
                        <input
                            className="form-item"
                            placeholder="Password"
                            name="password"
                            type="password"
                        />
                        <button className="form-submit" name ="submit" onClick={x}>Login</button>
                    </form>
                       
            </div>
                  
        </div>

        </React.Fragment>
            
        
    )
}
