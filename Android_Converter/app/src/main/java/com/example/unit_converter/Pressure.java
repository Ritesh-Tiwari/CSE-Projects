package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Pressure extends AppCompatActivity {
    EditText Atmos;
    double bar,pascal,torr,atmos;
    //double
    EditText Pascal,Bar;
    EditText Torr;
    Button Convert,Cance;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pressure);
        Atmos=findViewById(R.id.editText7);
        Bar = findViewById(R.id.editText8);
        Pascal=findViewById(R.id.editText9);
        Torr=findViewById(R.id.editText10);
        Convert=findViewById(R.id.button7);
        Cance=findViewById(R.id.button9);
        Convert.setOnClickListener(new View.OnClickListener() {
             @Override
            public void onClick(View v) {
                 atmos = Double.parseDouble(Atmos.getText().toString());

                 bar=atmos * 1.013;
                pascal=atmos * 101325;
                torr=atmos*760;

                Bar.setText(String.valueOf(bar));
                Pascal.setText(String.valueOf(pascal));
                Torr.setText(String.valueOf(torr));
            }
        });
        Cance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Pressure.this,MainActivity.class);
                startActivity(intent);
            }
        });

    }
}
