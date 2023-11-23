package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.sql.*;

public final class SingUp_jsp extends org.apache.jasper.runtime.HttpJspBase
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

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");

   
    try{
        int a=0;
    Connection con=null;
   String url="jdbc:mysql://localhost:3306/";
   String db="ritesh";
  String driver="com.mysql.jdbc.Driver";
  String username="root";
  
  Class.forName(driver).newInstance();
  con=DriverManager.getConnection(url+db,username,"");
 Statement st;
 st=con.createStatement();
  String name=request.getParameter("name");
  String address=request.getParameter("Address");
  String no=request.getParameter("no");
  String Id=request.getParameter("EmailID");
  String pass=request.getParameter("pass");
  
   if(!name.isEmpty())
  {
      try
      {
  st.executeUpdate("INSERT INTO `id_pass`(`Name`, `Address`, `Phone_No`, `Email_ID`, `Password`))"+
          "VALUES ('"+name+"','"+no+"','"+Id+"','"+pass+"','"+address +"')");
  a=1;
      }
      catch(Exception e)
      {
          out.print(e);
      }
  
    }
    }
  catch(Exception e)
          {
          
          }
  
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Forgot Your Password</title>\n");
      out.write("        <style>\n");
      out.write("             body{\n");
      out.write("                background-color:coral;\n");
      out.write("            }\n");
      out.write("             .filed{\n");
      out.write("               margin-left: 500px;\n");
      out.write("               margin-right: 700px;\n");
      out.write("               margin-top: 50px;\n");
      out.write("               color: white;\n");
      out.write("               font-size: 18px;\n");
      out.write("               background-color: rgba(0,0,0,0.5);\n");
      out.write("            }\n");
      out.write("           .filed textArea{\n");
      out.write("               margin-left:80px;\n");
      out.write("             font-align:Center;\n");
      out.write("              background-color:transparent;\n");
      out.write("               height: 30px;\n");
      out.write("            width:200px;\n");
      out.write("            color:white;\n");
      out.write("            border:none;\n");
      out.write("            outline: none;\n");
      out.write("            border-bottom: 2px solid tomato;\n");
      out.write("            margin-bottom: 10px;\n");
      out.write("            font-size: 20px;\n");
      out.write("}\n");
      out.write(".filed button{\n");
      out.write("       margin-left:80px;\n");
      out.write("             font-align:Center;\n");
      out.write("             background-color:mediumpurple;\n");
      out.write("                 height: 30px;\n");
      out.write("            width:200px;\n");
      out.write("            color: #fff;\n");
      out.write("           border-radius: 20px 20px 20px 20px;\n");
      out.write("            margin-bottom: 10px;\n");
      out.write("            font-size: 20px;\n");
      out.write("}\n");
      out.write(".filed button:hover{\n");
      out.write("    background-color: tomato;\n");
      out.write("    \n");
      out.write("}\n");
      out.write("#btn{\n");
      out.write("    color:tomato;\n");
      out.write("    background-color:snow;\n");
      out.write("    border-radius: 20px 20px 20px 20px;\n");
      out.write("     margin-left:80px;\n");
      out.write("    font-align:Center;\n");
      out.write("    height: 50px;\n");
      out.write("    width:200px;\n");
      out.write("}\n");
      out.write("#btn:hover{\n");
      out.write("    background-color: red;\n");
      out.write("    color: white;\n");
      out.write("}\n");
      out.write("        </style>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <form method=\"post\" action=\"SingUp.jsp\">\n");
      out.write("        <div class=\"filed\">\n");
      out.write("            <br/><br/>\n");
      out.write("            <h2><center>Sing up Here</center><br/>\n");
      out.write("            \n");
      out.write("            <label id=\"id\">Name</label> <br/>\n");
      out.write("            <textarea Placeholder=\"Enter Name\"  Id=\"TextBox1\" name=\"name\"></textarea><br/>\n");
      out.write("             <label>Address</label><br/>\n");
      out.write("             <textarea placeholder=\"Enter Address\"  Id=\"TextBox\" name=\"Address\"></textarea><br/>\n");
      out.write("             <label>Phone No</label><br>\n");
      out.write("            <textarea Placeholder=\"Enter Phone No\"  Id=\"TextBox1\" name=\"no\"></textarea><br/>\n");
      out.write("             <label>Email ID</label><br/>\n");
      out.write("             <textarea placeholder=\"Enter Email ID\"  Id=\"TextBox\" name=\"EmailID\"></textarea><br/>\n");
      out.write("             <label>Set Password</label><br>\n");
      out.write("           <textarea placeholder=\"Enter Password\"  Id=\"TextBox\" name=\"pass\"></textarea><br/>\n");
      out.write("              <input type=\"Submit\" value=\"Submit\"  Id=\"btn\">\n");
      out.write("              <input type=\"Submit\" value=\"cancel\"  Id=\"btn\"><br/>\n");
      out.write("        </div>\n");
      out.write("                </form>\n");
      out.write("    </body>\n");
      out.write("\n");
      out.write("</html>\n");
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
