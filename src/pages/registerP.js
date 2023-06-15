import React, { useState } from 'react';

const RegisterP = () => {
    const [formData, setFormData] = useState({
      name: '',
      email: '',
      password: ''
    });
  
    const handleSubmit = (event) => {
      event.preventDefault();
      // Lógica para enviar os dados do formulário
      console.log(formData);
    };
  
    const handleChange = (event) => {
      setFormData({ ...formData, [event.target.name]: event.target.value });
    };
  
    return (
      <div>
        <h1>Registrar Produtos</h1>
        <form onSubmit={handleSubmit}>
          <label>
            Nome:
            <input type="text" name="name" value={formData.name} onChange={handleChange} />
          </label>
          <br />
          <button type="submit">Enviar</button>
        </form>
      </div>
    );
  };
  
  export default RegisterP;