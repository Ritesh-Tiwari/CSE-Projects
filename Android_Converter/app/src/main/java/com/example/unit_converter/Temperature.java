package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Temperature extends AppCompatActivity {
    EditText celsius, fahr,kelvin;
    double cel;
    double fah;
    double kel;
    Button Convert,Cancel;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_temperature);
        celsius=findViewById(R.id.editText);
        fahr=findViewById(R.id.editText3);
        kelvin=findViewById(R.id.editText4);
        Convert=findViewById(R.id.button6);
        Convert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                cel= Double.parseDouble(celsius.getText().toString());
                //fah= Double.parseDouble(fahr.getText().toString());
                //kel= Double.parseDouble(kelvin.getText().toString());
                fah=(cel * 9/5)+32;
                kel=cel+273.15;
                fahr.setText(String.valueOf(fah));
                kelvin.setText(String.valueOf(kel));
            }
        });
        Cancel=findViewById(R.id.button5);
        Cancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Temperature.this,MainActivity.class);
                startActivity(intent);
            }
        });
    }
}
