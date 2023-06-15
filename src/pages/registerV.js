import React, { useState } from 'react';

const RegisterV = () => {
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
        <h1>Registrar Vendas</h1>
        <form onSubmit={handleSubmit}>
          <label>
            Código:
            <input type="text" name="name" value={formData.name} onChange={handleChange} />
          </label>
          <br />
          <label>
            Data:
            <input type="email" name="email" value={formData.email} onChange={handleChange} />
          </label>
          <br />
          <label>
            Produto
            <input type="password" name="password" value={formData.password} onChange={handleChange} />
          </label>
          <br />
          <button type="submit">Enviar</button>
        </form>
      </div>
    );
  };
  
  export default RegisterV;