package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class Home_005fPage_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Taxi Booking</title>\n");
      out.write("        <style>\n");
      out.write("            body{\n");
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
      out.write("        </style>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div class=\"Menu\">\n");
      out.write("               <center>\n");
      out.write("            <ul>\n");
      out.write("  \n");
      out.write("                <li><a href=\"Home_Page.jsp\">HOME</a></li>    \n");
      out.write("                <li><a href=\"Customer.jsp\">CUSTOMER INFO</a></li>\n");
      out.write("                <li><a href=\"Driver.jsp\">DRIVER INFO</a></li>\n");
      out.write("                <li><a href=\"Booking.jsp\">BOOKING INFO</a></li>\n");
      out.write("                <li><a href=\"Login_Page.jsp\">LOG OUT</a></li>\n");
      out.write("             \n");
      out.write("            </ul>\n");
      out.write("                                 </center>\n");
      out.write("         </div>\n");
      out.write("         \n");
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
