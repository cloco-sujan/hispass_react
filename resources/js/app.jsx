import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import App from './App.jsx';

import '../css/app.css';

const root = createRoot(document.getElementById('app'));
root.render(
    <BrowserRouter basename='/admin'>
        <App />
    </BrowserRouter>
);