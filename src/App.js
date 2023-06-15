import React from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import Home from './pages/Home';
import View from './pages/View';
import RegisterV from './pages/registerV';
import RegisterP from './pages/registerP';

const App = () => {
  return (
    <Router>
      <div>
        <nav>
          <ul>
            <li>
              <Link to="/">Home</Link>
            </li>
            <li>
              <Link to="/View">View</Link>
            </li>
            <li>
              <Link to="/registerP">registerP</Link>
            </li>
            <li>
              <Link to="/registerV">registerV</Link>
            </li>
          </ul>
        </nav>

        <Routes>
          <Route path="/View" element={<View />} />
          <Route path="/" element={<Home />} />
          <Route path="/registerP" element={<RegisterP />} />
          <Route path="/registerV" element={<RegisterV />} />
        </Routes>
      </div>
    </Router>
  );
};

export default App;
