import React, { useState,useEffect } from 'react';

const Home = () => {
    const [features, setFeatures] = useState([]);
    const [loading, setLoading] = useState(true);


useEffect(() => {
    fetch('/api/home-data')
        .then(response => response.json())
        .then(data => {
            setFeatures(data.features);
            setLoading(false);
        });
}, []);

    return (
        <div className="features-section">
        <h2>Our Features</h2>
        <div className="features-grid">
            {features.map((feature, index) => (
                <div key={index} className="feature-card">
                    <h3>{feature.title}</h3>
                    <p>{feature.description}</p>
                </div>
            ))}
        </div>
    </div>
    );
};

export default Home;