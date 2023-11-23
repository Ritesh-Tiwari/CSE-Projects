package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.sql.*;

public final class Login_005fPage_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\r\n");
      out.write("<!--\r\n");
      out.write("To change this license header, choose License Headers in Project Properties.\r\n");
      out.write("To change this template file, choose Tools | Templates\r\n");
      out.write("and open the template in the editor.\r\n");
      out.write("-->\r\n");
      out.write("\r\n");
      out.write("\r\n");

    int f=0;
    try{
    Connection con=null;
   String url="jdbc:mysql://localhost:3306/";
   String db="ritesh";
  String driver="com.mysql.jdbc.Driver";
  String username="root";
  
  Class.forName(driver).newInstance();
  con=DriverManager.getConnection(url+db,username,"");
  Statement st;
  st=con.createStatement();
  String ID=request.getParameter("id");
  String Pass=request.getParameter("pass");
  ResultSet resultset=st.executeQuery("Select *from id_pass");
  
    while(resultset.next())
    {
        if(ID.equalsIgnoreCase(resultset.getString(4)))
        {
            if(Pass.equalsIgnoreCase(resultset.getString(5)))
            {
                out.print("Found");
                f=1;
                break;
             }
        }
    }
    if(f==0)
    {
        response.sendRedirect("Login_Page.jsp");
    }
    else
    {
        response.sendRedirect("Home_Page.jsp");
    }
    }
    catch(Exception e)
    {
        
    }
 
      out.write("\r\n");
      out.write("<html>\r\n");
      out.write("    <head>\r\n");
      out.write("        <title>Login page</title>\r\n");
      out.write("        <meta charset=\"UTF-8\">\r\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n");
      out.write("        <style>\r\n");
      out.write("            body{\r\n");
      out.write("                background-color:coral;\r\n");
      out.write("            }\r\n");
      out.write("    .Login_Box{\r\n");
      out.write("     width: 300px;\r\n");
      out.write("    height: 400px;\r\n");
      out.write("    border-radius: 0px 0px 0px 0px;\r\n");
      out.write("    border-color: white;\r\n");
      out.write("    background-color: activecaption;\r\n");
      out.write("    margin-left: 600px;\r\n");
      out.write("    margin-top:50px\r\n");
      out.write(" \r\n");
      out.write("}\r\n");
      out.write(".Login_Box textArea{\r\n");
      out.write("    font-align:Center;\r\n");
      out.write("    background-color:transparent;\r\n");
      out.write("    height: 30px;\r\n");
      out.write("    width:200px;\r\n");
      out.write("    color: blue;\r\n");
      out.write("    border:none;\r\n");
      out.write("    outline: none;\r\n");
      out.write("    border-bottom: 2px solid gray;\r\n");
      out.write("    margin-bottom: 10px;\r\n");
      out.write("    font-size: 20px;\r\n");
      out.write("}\r\n");
      out.write("#pass{\r\n");
      out.write("      font-align:Center;\r\n");
      out.write("    background-color:transparent;\r\n");
      out.write("    height: 30px;\r\n");
      out.write("    width:200px;\r\n");
      out.write("    color: blue;\r\n");
      out.write("    border:none;\r\n");
      out.write("    outline: none;\r\n");
      out.write("    border-bottom: 2px solid gray;\r\n");
      out.write("    margin-bottom: 10px;\r\n");
      out.write("    font-size: 20px;\r\n");
      out.write("}\r\n");
      out.write("#btn{\r\n");
      out.write("    font-align:Center;\r\n");
      out.write("    background-color:mediumpurple;\r\n");
      out.write("    height: 30px;\r\n");
      out.write("    width:100px;\r\n");
      out.write("    color: #fff;\r\n");
      out.write("    border:none;\r\n");
      out.write("    border-radius: 20px 20px 20px 20px;\r\n");
      out.write("    outline: none;\r\n");
      out.write("    border-bottom: 2px solid gray;\r\n");
      out.write("    margin-bottom: 10px;\r\n");
      out.write("}\r\n");
      out.write("#btn:hover{\r\n");
      out.write("    background-color: tomato;\r\n");
      out.write("    \r\n");
      out.write("}\r\n");
      out.write(".Login_Box a{\r\n");
      out.write("    margin-left: 5px;\r\n");
      out.write("    color: blue;\r\n");
      out.write("    font-size: 18px;\r\n");
      out.write("    }\r\n");
      out.write("    .Login_Box a:hover{\r\n");
      out.write("        color:red;\r\n");
      out.write("    }\r\n");
      out.write("</style>\r\n");
      out.write("    </head>\r\n");
      out.write("    <body>\r\n");
      out.write(" \r\n");
      out.write("        <form action=\"Login_Page.jsp\" method=\"POST\" name=\"login\">\r\n");
      out.write("        <div class=\"Login_Box\">\r\n");
      out.write("            <br/><br/>\r\n");
      out.write("            <center><h3>Login Here </h3><br/>\r\n");
      out.write("            <textarea Placeholder=\"User ID\"  Id=\"TextBox\" name=\"id\"></textarea><br/>\r\n");
      out.write("            <input type=\"password\" name=\"pass\" placeholder=\"Password\" id=\"pass\">\r\n");
      out.write("              <input type=\"Submit\" value=\"Log in\"  Id=\"btn\">\r\n");
      out.write("              \r\n");
      out.write("  </center>\r\n");
      out.write("            <a href=\"forgot.jsp\">Forgot Password</a><br/>\r\n");
      out.write("              <a href=\"SingUp.jsp\">New Customer  Sing Up here</a>\r\n");
      out.write("            </div>\r\n");
      out.write("                \r\n");
      out.write("       </form>\r\n");
      out.write("        </Center>\r\n");
      out.write("    </body>\r\n");
      out.write("</html>\r\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
