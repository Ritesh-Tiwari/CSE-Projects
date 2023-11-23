namespace LMS
{
    partial class Main
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.booksToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.viewUpdateToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.viewUpdateToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.userIDToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.addIDToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.viewAndUpdateIDToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.issueToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.issueBooksToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.crystalReportToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.reportToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.logOutToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // menuStrip1
            // 
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.booksToolStripMenuItem,
            this.userIDToolStripMenuItem,
            this.issueToolStripMenuItem,
            this.crystalReportToolStripMenuItem,
            this.logOutToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(520, 24);
            this.menuStrip1.TabIndex = 0;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // booksToolStripMenuItem
            // 
            this.booksToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.viewUpdateToolStripMenuItem,
            this.viewUpdateToolStripMenuItem1});
            this.booksToolStripMenuItem.Name = "booksToolStripMenuItem";
            this.booksToolStripMenuItem.Size = new System.Drawing.Size(51, 20);
            this.booksToolStripMenuItem.Text = "Books";
            // 
            // viewUpdateToolStripMenuItem
            // 
            this.viewUpdateToolStripMenuItem.Name = "viewUpdateToolStripMenuItem";
            this.viewUpdateToolStripMenuItem.Size = new System.Drawing.Size(195, 22);
            this.viewUpdateToolStripMenuItem.Text = "Add Books";
            this.viewUpdateToolStripMenuItem.Click += new System.EventHandler(this.viewUpdateToolStripMenuItem_Click);
            // 
            // viewUpdateToolStripMenuItem1
            // 
            this.viewUpdateToolStripMenuItem1.Name = "viewUpdateToolStripMenuItem1";
            this.viewUpdateToolStripMenuItem1.Size = new System.Drawing.Size(195, 22);
            this.viewUpdateToolStripMenuItem1.Text = "View and UpdateBooks";
            this.viewUpdateToolStripMenuItem1.Click += new System.EventHandler(this.viewUpdateToolStripMenuItem1_Click);
            // 
            // userIDToolStripMenuItem
            // 
            this.userIDToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.addIDToolStripMenuItem,
            this.viewAndUpdateIDToolStripMenuItem});
            this.userIDToolStripMenuItem.Name = "userIDToolStripMenuItem";
            this.userIDToolStripMenuItem.Size = new System.Drawing.Size(56, 20);
            this.userIDToolStripMenuItem.Text = "User ID";
            // 
            // addIDToolStripMenuItem
            // 
            this.addIDToolStripMenuItem.Name = "addIDToolStripMenuItem";
            this.addIDToolStripMenuItem.Size = new System.Drawing.Size(179, 22);
            this.addIDToolStripMenuItem.Text = "Add ID";
            this.addIDToolStripMenuItem.Click += new System.EventHandler(this.addIDToolStripMenuItem_Click);
            // 
            // viewAndUpdateIDToolStripMenuItem
            // 
            this.viewAndUpdateIDToolStripMenuItem.Name = "viewAndUpdateIDToolStripMenuItem";
            this.viewAndUpdateIDToolStripMenuItem.Size = new System.Drawing.Size(179, 22);
            this.viewAndUpdateIDToolStripMenuItem.Text = "View And Update ID";
            this.viewAndUpdateIDToolStripMenuItem.Click += new System.EventHandler(this.viewAndUpdateIDToolStripMenuItem_Click);
            // 
            // issueToolStripMenuItem
            // 
            this.issueToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.issueBooksToolStripMenuItem});
            this.issueToolStripMenuItem.Name = "issueToolStripMenuItem";
            this.issueToolStripMenuItem.Size = new System.Drawing.Size(45, 20);
            this.issueToolStripMenuItem.Text = "Issue";
            this.issueToolStripMenuItem.Click += new System.EventHandler(this.issueToolStripMenuItem_Click);
            // 
            // issueBooksToolStripMenuItem
            // 
            this.issueBooksToolStripMenuItem.Name = "issueBooksToolStripMenuItem";
            this.issueBooksToolStripMenuItem.Size = new System.Drawing.Size(135, 22);
            this.issueBooksToolStripMenuItem.Text = "Issue Books";
            this.issueBooksToolStripMenuItem.Click += new System.EventHandler(this.issueBooksToolStripMenuItem_Click);
            // 
            // crystalReportToolStripMenuItem
            // 
            this.crystalReportToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.reportToolStripMenuItem});
            this.crystalReportToolStripMenuItem.Name = "crystalReportToolStripMenuItem";
            this.crystalReportToolStripMenuItem.Size = new System.Drawing.Size(93, 20);
            this.crystalReportToolStripMenuItem.Text = "Crystal Report";
            // 
            // reportToolStripMenuItem
            // 
            this.reportToolStripMenuItem.Name = "reportToolStripMenuItem";
            this.reportToolStripMenuItem.Size = new System.Drawing.Size(109, 22);
            this.reportToolStripMenuItem.Text = "Report";
            this.reportToolStripMenuItem.Click += new System.EventHandler(this.reportToolStripMenuItem_Click);
            // 
            // logOutToolStripMenuItem
            // 
            this.logOutToolStripMenuItem.Name = "logOutToolStripMenuItem";
            this.logOutToolStripMenuItem.Size = new System.Drawing.Size(62, 20);
            this.logOutToolStripMenuItem.Text = "Log Out";
            this.logOutToolStripMenuItem.Click += new System.EventHandler(this.logOutToolStripMenuItem_Click);
            // 
            // Main
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(249)))), ((int)(((byte)(133)))), ((int)(((byte)(4)))));
            this.BackgroundImage = global::LMS.Properties.Resources._3d95168;
            this.ClientSize = new System.Drawing.Size(520, 291);
            this.Controls.Add(this.menuStrip1);
            this.MainMenuStrip = this.menuStrip1;
            this.Name = "Main";
            this.Text = "Main";
            this.Load += new System.EventHandler(this.Main_Load);
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem booksToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem viewUpdateToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem viewUpdateToolStripMenuItem1;
        private System.Windows.Forms.ToolStripMenuItem userIDToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem addIDToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem viewAndUpdateIDToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem logOutToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem issueToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem issueBooksToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem crystalReportToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem reportToolStripMenuItem;

    }
}