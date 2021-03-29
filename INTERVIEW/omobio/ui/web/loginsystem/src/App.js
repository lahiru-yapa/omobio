import logo from './logo.svg';
import './App.css';
import { React } from "react";
import {BrowserRouter,Link,Switch,Route } from "react-router-dom";
import login from "./login";
import userview from "./userview";


function App() {
  return (
    <BrowserRouter>
      <switch>
        <Route path ="/" exact component={login}/>
        <Route path ="/userview" exact component={userview}/>
      </switch>
    </BrowserRouter>
  );
}

export default App;
