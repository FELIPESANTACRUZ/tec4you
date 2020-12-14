// import './global.css';
import React from 'react';
import ReactDOM from 'react-dom';
// globalsecoes
import App from './components/App.jsx';
// import Contatos from './pages/Contatos/index.jsx';
 import Solicitacoes from './pages/Contatos/solicitacoes.jsx';
import './index.css';



import { BrowserRouter as Router, Route } from 'react-router-dom';

ReactDOM.render(
    <Router>
        <React.StrictMode>

            {/* menu global secoes */}
            <Route exact path="/">
                <App />
                <Solicitacoes />
                {/* <Contatos /> */}
            </Route>
        </React.StrictMode>
    </Router>,
    document.getElementById('root')

);
