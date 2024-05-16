<html>
  <body>
    <div>
      <table>
        <tr>
          <td>
            <a href="/">Home</a>
          </td>
          <td>
            <a href="/products">Products</a>
          </td>
          <td>
            <a href="/customers">Customers</a>
          </td>
          <td>
            <a href="/about">About</a>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <a href="/products">my products</a>
          </td>
          <td>
            <a href="/products/classification/new">classifications</a>
          </td>
          <td>
            <a href="/products/new">new products</a>
          </td>
        </tr>
      </table>
    </div>
    <div>
      <h1>Products Classifications</h1>
    </div>
    <div>
      <form method="post" action="/products/classification/new">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label>title</label><br>
        <input 
          type="text" 
          name="title"
          placeholder="title"/><br>
        <label>description</label><br>
        <input 
          type="description"
          name="description"
          placeholder="description"/><br>
        <label>govt-class</label><br>
        <input 
          type="text"
          name="govt-class"
          placeholder="government classification"/><br>
        <input type="submit" value="Submit"/>
      </form>
  </body>
</html>