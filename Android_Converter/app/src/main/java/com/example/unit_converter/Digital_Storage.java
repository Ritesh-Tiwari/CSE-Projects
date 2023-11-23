package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Digital_Storage extends AppCompatActivity {
    EditText MB,KB,GB,TB,Biyte;
    double mb,kb,gb,tb,b;

    Button Convert,Cance;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_digital__storage);
        MB=findViewById(R.id.editText12);
        KB=findViewById(R.id.editText13);
        GB=findViewById(R.id.editText14);
        TB=findViewById(R.id.editText15);
        Biyte=findViewById(R.id.editText16);
        Convert=findViewById(R.id.button11);
        Cance=findViewById(R.id.button10);
        Convert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                mb = Double.parseDouble(MB.getText().toString());
                kb=mb*1024;
                gb=mb/1024;
                tb=mb/1024*1024;
                b=mb*1024*1024;
                KB.setText("Kilobiyte           :"+String.valueOf(kb));
                GB.setText("Gigabiyte           :"+String.valueOf(gb));
                TB.setText("tetaBiyte           :"+String.valueOf(tb));
                Biyte.setText("Biyte            :"+String.valueOf(b));

            }
        });
        Cance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Digital_Storage.this,MainActivity.class);
                startActivity(intent);
            }
        });
    }
}
