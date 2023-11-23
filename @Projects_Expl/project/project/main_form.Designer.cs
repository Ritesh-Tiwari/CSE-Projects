namespace project
{
    partial class main_form
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
            this.studentsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.adminDToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.courceToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.newStudentToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.updateRecordToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.allRecordsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.teacherToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.newRecordsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.updateRecordsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.allRecordsToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.examToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.accountsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.costingToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.logOutToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.logOutToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // menuStrip1
            // 
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.studentsToolStripMenuItem,
            this.courceToolStripMenuItem,
            this.teacherToolStripMenuItem,
            this.examToolStripMenuItem,
            this.logOutToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(873, 24);
            this.menuStrip1.TabIndex = 0;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // studentsToolStripMenuItem
            // 
            this.studentsToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.adminDToolStripMenuItem});
            this.studentsToolStripMenuItem.Name = "studentsToolStripMenuItem";
            this.studentsToolStripMenuItem.Size = new System.Drawing.Size(55, 20);
            this.studentsToolStripMenuItem.Text = "Admin";
            // 
            // adminDToolStripMenuItem
            // 
            this.adminDToolStripMenuItem.Name = "adminDToolStripMenuItem";
            this.adminDToolStripMenuItem.Size = new System.Drawing.Size(148, 22);
            this.adminDToolStripMenuItem.Text = "Admin Details";
            this.adminDToolStripMenuItem.Click += new System.EventHandler(this.adminDToolStripMenuItem_Click);
            // 
            // courceToolStripMenuItem
            // 
            this.courceToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.newStudentToolStripMenuItem,
            this.updateRecordToolStripMenuItem,
            this.allRecordsToolStripMenuItem});
            this.courceToolStripMenuItem.Name = "courceToolStripMenuItem";
            this.courceToolStripMenuItem.Size = new System.Drawing.Size(60, 20);
            this.courceToolStripMenuItem.Text = "Student";
            // 
            // newStudentToolStripMenuItem
            // 
            this.newStudentToolStripMenuItem.Name = "newStudentToolStripMenuItem";
            this.newStudentToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.newStudentToolStripMenuItem.Text = "New Records";
            this.newStudentToolStripMenuItem.Click += new System.EventHandler(this.newStudentToolStripMenuItem_Click);
            // 
            // updateRecordToolStripMenuItem
            // 
            this.updateRecordToolStripMenuItem.Name = "updateRecordToolStripMenuItem";
            this.updateRecordToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.updateRecordToolStripMenuItem.Text = "Update Records";
            this.updateRecordToolStripMenuItem.Click += new System.EventHandler(this.updateRecordToolStripMenuItem_Click);
            // 
            // allRecordsToolStripMenuItem
            // 
            this.allRecordsToolStripMenuItem.Name = "allRecordsToolStripMenuItem";
            this.allRecordsToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.allRecordsToolStripMenuItem.Text = "All Records";
            this.allRecordsToolStripMenuItem.Click += new System.EventHandler(this.allRecordsToolStripMenuItem_Click);
            // 
            // teacherToolStripMenuItem
            // 
            this.teacherToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.newRecordsToolStripMenuItem,
            this.updateRecordsToolStripMenuItem,
            this.allRecordsToolStripMenuItem1});
            this.teacherToolStripMenuItem.Name = "teacherToolStripMenuItem";
            this.teacherToolStripMenuItem.Size = new System.Drawing.Size(60, 20);
            this.teacherToolStripMenuItem.Text = "Teacher";
            // 
            // newRecordsToolStripMenuItem
            // 
            this.newRecordsToolStripMenuItem.Name = "newRecordsToolStripMenuItem";
            this.newRecordsToolStripMenuItem.Size = new System.Drawing.Size(157, 22);
            this.newRecordsToolStripMenuItem.Text = "New Records";
            this.newRecordsToolStripMenuItem.Click += new System.EventHandler(this.newRecordsToolStripMenuItem_Click);
            // 
            // updateRecordsToolStripMenuItem
            // 
            this.updateRecordsToolStripMenuItem.Name = "updateRecordsToolStripMenuItem";
            this.updateRecordsToolStripMenuItem.Size = new System.Drawing.Size(157, 22);
            this.updateRecordsToolStripMenuItem.Text = "Update Records";
            this.updateRecordsToolStripMenuItem.Click += new System.EventHandler(this.updateRecordsToolStripMenuItem_Click);
            // 
            // allRecordsToolStripMenuItem1
            // 
            this.allRecordsToolStripMenuItem1.Name = "allRecordsToolStripMenuItem1";
            this.allRecordsToolStripMenuItem1.Size = new System.Drawing.Size(157, 22);
            this.allRecordsToolStripMenuItem1.Text = "All Records";
            this.allRecordsToolStripMenuItem1.Click += new System.EventHandler(this.allRecordsToolStripMenuItem1_Click);
            // 
            // examToolStripMenuItem
            // 
            this.examToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.accountsToolStripMenuItem,
            this.costingToolStripMenuItem});
            this.examToolStripMenuItem.Name = "examToolStripMenuItem";
            this.examToolStripMenuItem.Size = new System.Drawing.Size(47, 20);
            this.examToolStripMenuItem.Text = "Exam";
            // 
            // accountsToolStripMenuItem
            // 
            this.accountsToolStripMenuItem.Name = "accountsToolStripMenuItem";
            this.accountsToolStripMenuItem.Size = new System.Drawing.Size(124, 22);
            this.accountsToolStripMenuItem.Text = "Accounts";
            // 
            // costingToolStripMenuItem
            // 
            this.costingToolStripMenuItem.Name = "costingToolStripMenuItem";
            this.costingToolStripMenuItem.Size = new System.Drawing.Size(124, 22);
            this.costingToolStripMenuItem.Text = "Costing";
            // 
            // logOutToolStripMenuItem
            // 
            this.logOutToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.logOutToolStripMenuItem1});
            this.logOutToolStripMenuItem.Name = "logOutToolStripMenuItem";
            this.logOutToolStripMenuItem.Size = new System.Drawing.Size(62, 20);
            this.logOutToolStripMenuItem.Text = "Log Out";
            this.logOutToolStripMenuItem.Click += new System.EventHandler(this.logOutToolStripMenuItem_Click);
            // 
            // logOutToolStripMenuItem1
            // 
            this.logOutToolStripMenuItem1.Name = "logOutToolStripMenuItem1";
            this.logOutToolStripMenuItem1.Size = new System.Drawing.Size(117, 22);
            this.logOutToolStripMenuItem1.Text = "Log Out";
            this.logOutToolStripMenuItem1.Click += new System.EventHandler(this.logOutToolStripMenuItem1_Click);
            // 
            // main_form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
           // this.BackgroundImage = global::project.Properties.Resources.Dark_wallpaper_desktop_background_29;
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ClientSize = new System.Drawing.Size(873, 496);
            this.Controls.Add(this.menuStrip1);
            this.MainMenuStrip = this.menuStrip1;
            this.Name = "main_form";
            this.Text = "main_form";
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem studentsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem adminDToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem courceToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem newStudentToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem updateRecordToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem allRecordsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem teacherToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem newRecordsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem updateRecordsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem allRecordsToolStripMenuItem1;
        private System.Windows.Forms.ToolStripMenuItem examToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem accountsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem costingToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem logOutToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem logOutToolStripMenuItem1;
    }
}