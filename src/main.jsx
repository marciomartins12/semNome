import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './Pages/PaginaProdutos/App';
import { Provider } from 'react-redux';
import Store from './Store/Store.jsx';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './index.css';


ReactDOM.createRoot(document.getElementById('root')).render(

  <React.StrictMode>
  <BrowserRouter>
    <Provider store={Store} >
  <Routes>
  <Route path="/" element={<App/>}/>
{/* carrinho de compra aqui depois */}
  </Routes>
    </Provider>
  
  </BrowserRouter>
  </React.StrictMode>
);
