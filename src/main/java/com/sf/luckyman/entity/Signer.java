package com.sf.luckyman.entity;

/***
 * 签到人员
 */
public class Signer {

    private String id;

    private String name;

    private String gender;

    private String email;

    private String tel;

    private String school;

    private String major;

    private String graduation;

    private String namaen;

    private String status;

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public String getSchool() {
        return school;
    }

    public void setSchool(String school) {
        this.school = school;
    }

    public String getMajor() {
        return major;
    }

    public void setMajor(String major) {
        this.major = major;
    }

    public String getGraduation() {
        return graduation;
    }

    public void setGraduation(String graduation) {
        this.graduation = graduation;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getNamaen() {
        return namaen;
    }

    public void setNamaen(String namaen) {
        this.namaen = namaen;
    }

    @Override
    public String toString() {
        return "Signer{" +
                "id='" + id + '\'' +
                ", name='" + name + '\'' +
                ", gender='" + gender + '\'' +
                ", email='" + email + '\'' +
                ", tel='" + tel + '\'' +
                ", school='" + school + '\'' +
                ", major='" + major + '\'' +
                ", graduation='" + graduation + '\'' +
                ", namaen='" + namaen + '\'' +
                ", status='" + status + '\'' +
                '}';
    }
}
