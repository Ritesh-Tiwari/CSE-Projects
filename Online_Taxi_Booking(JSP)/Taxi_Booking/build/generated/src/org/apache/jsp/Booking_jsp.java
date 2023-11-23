package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.sql.*;

public final class Booking_jsp extends org.apache.jasper.runtime.HttpJspBase
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
  String c_id=request.getParameter("c_id");
  String d_id=request.getParameter("d_id");
  String start=request.getParameter("start");
  String end=request.getParameter("end");
  String km=request.getParameter("km");
  String amount=request.getParameter("amount");

   if(!c_id.isEmpty())
  {
      try
      {
  st.executeUpdate("INSERT INTO `booking`(`Cust_ID`, `Driver_ID`, `Source`, `Destination`, `KM`, `Total_Amount`)"+
          "VALUES ('"+c_id+"','"+d_id+"','"+start+"','"+end+"','"+km +"','"+amount+"')");
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
      out.write("        <title>Booking Infro</title>\n");
      out.write("        <style>\n");
      out.write("          body{\n");
      out.write("                background-color: indigo;\n");
      out.write("            }\n");
      out.write("            .Menu{\n");
      out.write("                margin-left: 350px;\n");
      out.write("                margin-right: 30px;\n");
      out.write("                margin-top: 10px;\n");
      out.write("                width: 800px;\n");
      out.write("                height: 50px;\n");
      out.write("                background-color: rgba(0,0,0,0.5);\n");
      out.write("                color:white;\n");
      out.write("               \n");
      out.write("            }\n");
      out.write("            .Menu ul li{\n");
      out.write("                 display: inline-block;\n");
      out.write("                font-size: 18px;\n");
      out.write("                line-height: 50px;\n");
      out.write("                list-style: none;\n");
      out.write("                font-style: bold;\n");
      out.write("                margin-left: 20px;\n");
      out.write("              \n");
      out.write("            }\n");
      out.write("            .Menu a{\n");
      out.write("                  color: white;\n");
      out.write("            }\n");
      out.write("            .Menu a:hover{\n");
      out.write("                background-color: white;\n");
      out.write("                color:red;\n");
      out.write("                padding:10px 10px 10px 10px ;\n");
      out.write("            }\n");
      out.write("            .filed{\n");
      out.write("               margin-left: 500px;\n");
      out.write("               margin-right: 700px;\n");
      out.write("               margin-top: 50px;\n");
      out.write("               color: white;\n");
      out.write("               font-size: 18px;\n");
      out.write("               background-color: rgba(0,0,0,0.1);\n");
      out.write("            }\n");
      out.write("           .filed textArea{\n");
      out.write("               margin-left:80px;\n");
      out.write("             font-align:Center;\n");
      out.write("              background-color:transparent;\n");
      out.write("                 height: 30px;\n");
      out.write("            width:200px;\n");
      out.write("            color:white;\n");
      out.write("            border:none;\n");
      out.write("            outline: none;\n");
      out.write("            border-bottom: 2px solid gray;\n");
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
      out.write(".btn{\n");
      out.write("    float: left;\n");
      out.write("    margin-top:100px;\n");
      out.write("    width: 150px;\n");
      out.write("    height: 300px;\n");
      out.write("    background-color: rgba(0,0,0,0.5);\n");
      out.write("    \n");
      out.write("    }\n");
      out.write("    .btn a{\n");
      out.write("        color:white;\n");
      out.write("    font-size: 20px;\n");
      out.write("    font-weight: bold;\n");
      out.write("    }\n");
      out.write(".btn ul li{\n");
      out.write("                \n");
      out.write("                font-size: 18px;\n");
      out.write("                line-height: 50px;\n");
      out.write("                list-style: none;\n");
      out.write("                font-style: bold;\n");
      out.write("                margin-left: 10px;\n");
      out.write("              color:white;\n");
      out.write("              font-size: 18px;\n");
      out.write("           \n");
      out.write("}\n");
      out.write("#submit{\n");
      out.write("    color:tomato;\n");
      out.write("    background-color:snow;\n");
      out.write("    border-radius: 20px 20px 20px 20px;\n");
      out.write("     margin-left:80px;\n");
      out.write("    font-align:Center;\n");
      out.write("    height: 50px;\n");
      out.write("    width:200px;\n");
      out.write("}\n");
      out.write("#submit:hover{\n");
      out.write("    background-color: red;\n");
      out.write("    color: white;\n");
      out.write("}\n");
      out.write("        </style>\n");
      out.write("   \n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <form method=\"post\" action=\"Booking.jsp\" name=\"form\">\n");
      out.write("        <div class=\"Menu\">\n");
      out.write("            <ul>\n");
      out.write("                <li><a href=\"Home_Page.jsp\">HOME</a></li>    \n");
      out.write("                <li><a href=\"Customer.jsp\">CUSTOMER INFO</a></li>\n");
      out.write("                <li><a href=\"Driver.jsp\">DRIVER INFO</a></li>\n");
      out.write("                <li><a href=\"Booking.jsp\" style=\"color:red;\">BOOKING INFO</a></li>\n");
      out.write("                <li><a href=\"Login_Page.jsp\">LOG OUT</a></li>\n");
      out.write("            </ul>\n");
      out.write("         </div>\n");
      out.write("          <div class=\"btn\">\n");
      out.write("            <ul>\n");
      out.write("  \n");
      out.write("                <li ><a href=\"#\" style=\"color:red;\">Insert</a></li>    \n");
      out.write("                   <li><a href=\"#\">Search</a></li>     \n");
      out.write("                <li><a href=\"#\">Update</a></li>\n");
      out.write("                <li><a href=\"#\">Delete</a></li>\n");
      out.write("                    \n");
      out.write("            </ul>\n");
      out.write("        </div>\n");
      out.write("        <div class =\"filed\">\n");
      out.write("            \n");
      out.write("            \n");
      out.write("            <label>Customer ID</label><br>\n");
      out.write("                  <textarea placeholder=\"Enter ID\" name=\"c_id\"></textarea><br/>\n");
      out.write("                  <label>Driver ID</label><br>\n");
      out.write("                <textarea placeholder=\"Enter ID\" name=\"d_id\"></textarea><br/>\n");
      out.write("                <label>Source</label><br>\n");
      out.write("                <textarea placeholder=\"Enter Source\" name=\"start\"></textarea><br/>\n");
      out.write("                <label>Destination</label><br>\n");
      out.write("                <textarea placeholder=\"Enter Destination\" name=\"end\"></textarea><br/>\n");
      out.write("                <label>km</label><br>\n");
      out.write("                <textarea placeholder=\"Enter km\" oninput=\"f();\" name=\"km\"></textarea><br/>\n");
      out.write("                <label>Total Amount</label><br>\n");
      out.write("                <textarea placeholder=\"Amount\" name=\"amount\"></textarea><br/>\n");
      out.write("             <input type=\"Submit\" value=\"Submit\" id=\"submit\">\n");
      out.write("             <script>\n");
      out.write("                 function f() {\n");
      out.write("                     var a=document.form.km.value();\n");
      out.write("                     var c=a*50;\n");
      out.write("                     document.form.amount.value=c;\n");
      out.write("                 }\n");
      out.write("             </script>\n");
      out.write("        </div>\n");
      out.write("        </form>\n");
      out.write("    </body>\n");
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
