// Fungsi untuk login
const login = async (username, password) => {
    try {
      const response = await fetch('https://thvlwtsr-8000.asse.devtunnels.ms/', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username, password }),
      });
  
      const data = await response.json();
  
      if (!response.ok) {
        throw new Error(data.message || 'Login failed');
      }
  
      const token = data.token;
  
      // Simpan token di localStorage atau cookie
      localStorage.setItem('jwtToken', token);
  
      return token;
    } catch (error) {
      console.error('Error during login:', error);
      throw error;
    }
  };
  
  // Fungsi untuk register
  const register = async (username, password) => {
    try {
      const response = await fetch('https://thvlwtsr-8000.asse.devtunnels.ms/', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username, password }),
      });
  
      const data = await response.json();
  
      if (!response.ok) {
        throw new Error(data.message || 'Registration failed');
      }
  
      return data;
    } catch (error) {
      console.error('Error during register:', error);
      throw error;
    }
  };
  